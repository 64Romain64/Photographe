<?php

namespace ContainerWnGyxCa;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderde51d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer68170 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5210a = [
        
    ];

    public function getConnection()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'getConnection', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'getMetadataFactory', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'getExpressionBuilder', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'beginTransaction', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'getCache', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'transactional', array('func' => $func), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->transactional($func);
    }

    public function commit()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'commit', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->commit();
    }

    public function rollback()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'rollback', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'getClassMetadata', array('className' => $className), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'createQuery', array('dql' => $dql), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'createNamedQuery', array('name' => $name), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'createQueryBuilder', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'flush', array('entity' => $entity), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'clear', array('entityName' => $entityName), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->clear($entityName);
    }

    public function close()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'close', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->close();
    }

    public function persist($entity)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'persist', array('entity' => $entity), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'remove', array('entity' => $entity), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'refresh', array('entity' => $entity), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'detach', array('entity' => $entity), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'merge', array('entity' => $entity), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'contains', array('entity' => $entity), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'getEventManager', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'getConfiguration', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'isOpen', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'getUnitOfWork', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'getProxyFactory', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'initializeObject', array('obj' => $obj), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'getFilters', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'isFiltersStateClean', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'hasFilters', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return $this->valueHolderde51d->hasFilters();
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

        $instance->initializer68170 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderde51d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderde51d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderde51d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, '__get', ['name' => $name], $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        if (isset(self::$publicProperties5210a[$name])) {
            return $this->valueHolderde51d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde51d;

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

        $targetObject = $this->valueHolderde51d;
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
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde51d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderde51d;
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
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, '__isset', array('name' => $name), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde51d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderde51d;
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
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, '__unset', array('name' => $name), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde51d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderde51d;
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
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, '__clone', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        $this->valueHolderde51d = clone $this->valueHolderde51d;
    }

    public function __sleep()
    {
        $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, '__sleep', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;

        return array('valueHolderde51d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer68170 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer68170;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer68170 && ($this->initializer68170->__invoke($valueHolderde51d, $this, 'initializeProxy', array(), $this->initializer68170) || 1) && $this->valueHolderde51d = $valueHolderde51d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderde51d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderde51d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
