<?php
namespace Digital\Limits\Observer;


use Magento\Framework\Event\ObserverInterface;
use Magento\Checkout\Model\Cart as CustomerCart;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\App\Response\RedirectInterface;
use Magento\Framework\Event\Observer;


class ValidateCartObserver implements ObserverInterface
{
    const XML_QUANTITY_VALUE = 'digital/storefront/qty_max';
    const XML_CATEGORY_VALUE = 'digital/storefront/category_id';
    /**
     * @var ManagerInterface
     */
    protected $messageManager;

    /**
     * @var RedirectInterface
     */
    protected $redirect;

    /**
     * @var Cart
     */
    protected $cart;

    //protected $scopeConfig;

    /**
     * @param ManagerInterface $messageManager
     * @param RedirectInterface $redirect
     * @param CustomerCart $cart
     */
    public function __construct(
        ManagerInterface $messageManager,
        RedirectInterface $redirect,
        CustomerCart $cart,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->messageManager = $messageManager;
        $this->redirect = $redirect;
        $this->cart = $cart;
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Validate Cart Before going to checkout
     * - event: controller_action_predispatch_checkout_index_index
     *
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        
        //store information
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        $qtymax = $this->scopeConfig->getValue(self::XML_QUANTITY_VALUE, $storeScope)
        $catsId = explode(',', $this->scopeConfig->getValue(self::XML_CATEGORY_VALUE, $storeScope));


        //quantity
        $quote = $this->cart->getQuote();
        $controller = $observer->getControllerAction();
        $cartItemsQty = $quote->getItemsQty(); 
        // Check each product in cart
        foreach ($quote->getAllItems() as $item) 
        {
        	$product = $item->getProduct();
        	// Check if product belongs to specified categories    
		    $categoryIds = $product->getCategoryIds(); 
		    $exists = false;
		    foreach ($categoryIds as $value) 
		    {
		    	if(in_array($catsId == $value)) 
		    	{
		    		$exists = true;
		            break;    
		        }  
		    }
		    if($exists && $cartItemsQty > $qtymax ) 
		    {
		    	$this->messageManager->addWarningMessage( __('Please can add upto 5 quantity to cart!'));
		        $this->redirect->redirect($controller->getResponse(), 'checkout/cart'); 
		    }
		}        
    }    
}
