<?php

namespace Container1uSW8Jq;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2ecd4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraca68 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese1235 = [
        
    ];

    public function getConnection()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'getConnection', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'getMetadataFactory', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'getExpressionBuilder', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'beginTransaction', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'getCache', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'transactional', array('func' => $func), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'wrapInTransaction', array('func' => $func), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'commit', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->commit();
    }

    public function rollback()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'rollback', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'getClassMetadata', array('className' => $className), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'createQuery', array('dql' => $dql), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'createNamedQuery', array('name' => $name), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'createQueryBuilder', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'flush', array('entity' => $entity), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'clear', array('entityName' => $entityName), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->clear($entityName);
    }

    public function close()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'close', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->close();
    }

    public function persist($entity)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'persist', array('entity' => $entity), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'remove', array('entity' => $entity), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'refresh', array('entity' => $entity), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'detach', array('entity' => $entity), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'merge', array('entity' => $entity), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'contains', array('entity' => $entity), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'getEventManager', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'getConfiguration', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'isOpen', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'getUnitOfWork', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'getProxyFactory', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'initializeObject', array('obj' => $obj), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'getFilters', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'isFiltersStateClean', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'hasFilters', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return $this->valueHolder2ecd4->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializeraca68 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2ecd4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2ecd4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2ecd4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, '__get', ['name' => $name], $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        if (isset(self::$publicPropertiese1235[$name])) {
            return $this->valueHolder2ecd4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ecd4;

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

        $targetObject = $this->valueHolder2ecd4;
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
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ecd4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2ecd4;
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
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, '__isset', array('name' => $name), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ecd4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2ecd4;
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
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, '__unset', array('name' => $name), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ecd4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2ecd4;
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
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, '__clone', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        $this->valueHolder2ecd4 = clone $this->valueHolder2ecd4;
    }

    public function __sleep()
    {
        $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, '__sleep', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;

        return array('valueHolder2ecd4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraca68 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraca68;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraca68 && ($this->initializeraca68->__invoke($valueHolder2ecd4, $this, 'initializeProxy', array(), $this->initializeraca68) || 1) && $this->valueHolder2ecd4 = $valueHolder2ecd4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2ecd4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2ecd4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
