<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.domain.customer_service.command_handler.forward_customer_thread_handler' shared service.

return $this->services['prestashop.core.domain.customer_service.command_handler.forward_customer_thread_handler'] = new \PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler\ForwardCustomerThreadHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));