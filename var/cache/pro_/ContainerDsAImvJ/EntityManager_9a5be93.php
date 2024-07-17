<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderc561b = null;
    private $initializere1d7c = null;
    private static $publicProperties88657 = [
        
    ];
    public function getConnection()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'getConnection', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'getMetadataFactory', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'getExpressionBuilder', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'beginTransaction', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->beginTransaction();
    }
    public function getCache()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'getCache', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->getCache();
    }
    public function transactional($func)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'transactional', array('func' => $func), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'wrapInTransaction', array('func' => $func), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'commit', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->commit();
    }
    public function rollback()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'rollback', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'getClassMetadata', array('className' => $className), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'createQuery', array('dql' => $dql), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'createNamedQuery', array('name' => $name), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'createQueryBuilder', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'flush', array('entity' => $entity), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'clear', array('entityName' => $entityName), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->clear($entityName);
    }
    public function close()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'close', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->close();
    }
    public function persist($entity)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'persist', array('entity' => $entity), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'remove', array('entity' => $entity), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'refresh', array('entity' => $entity), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'detach', array('entity' => $entity), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'merge', array('entity' => $entity), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'getRepository', array('entityName' => $entityName), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'contains', array('entity' => $entity), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'getEventManager', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'getConfiguration', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'isOpen', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'getUnitOfWork', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'getProxyFactory', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'initializeObject', array('obj' => $obj), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'getFilters', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'isFiltersStateClean', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'hasFilters', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return $this->valueHolderc561b->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializere1d7c = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderc561b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc561b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderc561b->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, '__get', ['name' => $name], $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        if (isset(self::$publicProperties88657[$name])) {
            return $this->valueHolderc561b->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc561b;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderc561b;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc561b;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderc561b;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, '__isset', array('name' => $name), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc561b;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderc561b;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, '__unset', array('name' => $name), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc561b;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderc561b;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, '__clone', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        $this->valueHolderc561b = clone $this->valueHolderc561b;
    }
    public function __sleep()
    {
        $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, '__sleep', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
        return array('valueHolderc561b');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere1d7c = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere1d7c;
    }
    public function initializeProxy() : bool
    {
        return $this->initializere1d7c && ($this->initializere1d7c->__invoke($valueHolderc561b, $this, 'initializeProxy', array(), $this->initializere1d7c) || 1) && $this->valueHolderc561b = $valueHolderc561b;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc561b;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc561b;
    }
}
