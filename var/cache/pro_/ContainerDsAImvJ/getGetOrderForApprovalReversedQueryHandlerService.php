<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForApprovalReversedQueryHandler' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForApprovalReversedQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForApprovalReversedQueryHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] ?? $this->load('getPsCheckoutCartRepositoryService.php')));