<?php

namespace ContainerPtsC9qK;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera8c2e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera2da7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2efff = [
        
    ];

    public function getConnection()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'getConnection', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'getMetadataFactory', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'getExpressionBuilder', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'beginTransaction', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'getCache', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->getCache();
    }

    public function transactional($func)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'transactional', array('func' => $func), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'wrapInTransaction', array('func' => $func), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'commit', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->commit();
    }

    public function rollback()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'rollback', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'getClassMetadata', array('className' => $className), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'createQuery', array('dql' => $dql), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'createNamedQuery', array('name' => $name), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'createQueryBuilder', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'flush', array('entity' => $entity), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'clear', array('entityName' => $entityName), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->clear($entityName);
    }

    public function close()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'close', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->close();
    }

    public function persist($entity)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'persist', array('entity' => $entity), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'remove', array('entity' => $entity), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'refresh', array('entity' => $entity), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'detach', array('entity' => $entity), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'merge', array('entity' => $entity), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'getRepository', array('entityName' => $entityName), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'contains', array('entity' => $entity), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'getEventManager', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'getConfiguration', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'isOpen', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'getUnitOfWork', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'getProxyFactory', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'initializeObject', array('obj' => $obj), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'getFilters', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'isFiltersStateClean', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'hasFilters', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return $this->valueHoldera8c2e->hasFilters();
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

        $instance->initializera2da7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera8c2e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera8c2e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera8c2e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, '__get', ['name' => $name], $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        if (isset(self::$publicProperties2efff[$name])) {
            return $this->valueHoldera8c2e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8c2e;

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

        $targetObject = $this->valueHoldera8c2e;
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
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8c2e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera8c2e;
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
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, '__isset', array('name' => $name), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8c2e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera8c2e;
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
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, '__unset', array('name' => $name), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8c2e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera8c2e;
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
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, '__clone', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        $this->valueHoldera8c2e = clone $this->valueHoldera8c2e;
    }

    public function __sleep()
    {
        $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, '__sleep', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;

        return array('valueHoldera8c2e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera2da7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera2da7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera2da7 && ($this->initializera2da7->__invoke($valueHoldera8c2e, $this, 'initializeProxy', array(), $this->initializera2da7) || 1) && $this->valueHoldera8c2e = $valueHoldera8c2e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera8c2e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera8c2e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
