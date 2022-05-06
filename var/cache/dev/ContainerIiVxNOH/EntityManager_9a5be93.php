<?php

namespace ContainerIiVxNOH;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc72ff = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2a218 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb0ff9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'getConnection', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'getMetadataFactory', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'getExpressionBuilder', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'beginTransaction', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'getCache', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'transactional', array('func' => $func), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'commit', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->commit();
    }

    public function rollback()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'rollback', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'getClassMetadata', array('className' => $className), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'createQuery', array('dql' => $dql), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'createNamedQuery', array('name' => $name), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'createQueryBuilder', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'flush', array('entity' => $entity), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'clear', array('entityName' => $entityName), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->clear($entityName);
    }

    public function close()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'close', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->close();
    }

    public function persist($entity)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'persist', array('entity' => $entity), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'remove', array('entity' => $entity), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'refresh', array('entity' => $entity), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'detach', array('entity' => $entity), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'merge', array('entity' => $entity), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'contains', array('entity' => $entity), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'getEventManager', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'getConfiguration', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'isOpen', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'getUnitOfWork', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'getProxyFactory', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'initializeObject', array('obj' => $obj), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'getFilters', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'isFiltersStateClean', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'hasFilters', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return $this->valueHolderc72ff->hasFilters();
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

        $instance->initializer2a218 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc72ff) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc72ff = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc72ff->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, '__get', ['name' => $name], $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        if (isset(self::$publicPropertiesb0ff9[$name])) {
            return $this->valueHolderc72ff->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc72ff;

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

        $targetObject = $this->valueHolderc72ff;
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
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc72ff;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc72ff;
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
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, '__isset', array('name' => $name), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc72ff;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc72ff;
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
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, '__unset', array('name' => $name), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc72ff;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc72ff;
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
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, '__clone', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        $this->valueHolderc72ff = clone $this->valueHolderc72ff;
    }

    public function __sleep()
    {
        $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, '__sleep', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;

        return array('valueHolderc72ff');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2a218 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2a218;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2a218 && ($this->initializer2a218->__invoke($valueHolderc72ff, $this, 'initializeProxy', array(), $this->initializer2a218) || 1) && $this->valueHolderc72ff = $valueHolderc72ff;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc72ff;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc72ff;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
