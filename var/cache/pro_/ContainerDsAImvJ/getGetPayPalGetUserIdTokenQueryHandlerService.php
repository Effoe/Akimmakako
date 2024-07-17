<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\PayPal\OAuth\Query\GetPayPalGetUserIdTokenQueryHandler' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\Query\\GetPayPalGetUserIdTokenQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\OAuth\Query\GetPayPalGetUserIdTokenQueryHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\OAuthService'] ?? $this->load('getOAuthServiceService.php')), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository'] ?? $this->load('getPayPalCustomerRepositoryService.php')), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] ?? $this->load('getPayPalConfigurationService.php')));
