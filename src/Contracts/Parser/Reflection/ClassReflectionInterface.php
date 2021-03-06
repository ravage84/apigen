<?php declare(strict_types=1);

namespace ApiGen\Contracts\Parser\Reflection;

use ApiGen\Contracts\Parser\Reflection\Behavior\LinedInterface;
use ApiGen\Contracts\Parser\Reflection\TokenReflection\ReflectionFactoryInterface;
use ApiGen\Parser\Reflection\Parts\VisibilityTrait;

interface ClassReflectionInterface extends ElementReflectionInterface, LinedInterface
{
    public function isDocumented(): bool;

    public function getParentClass(): ?ClassReflectionInterface;

    public function getParentClassName(): ?string;

    /**
     * @return ClassReflectionInterface[]
     */
    public function getParentClasses(): array;

    /**
     * @return ClassReflectionInterface[]
     */
    public function getDirectSubClasses(): array;

    /**
     * @return ClassReflectionInterface[]
     */
    public function getIndirectSubClasses(): array;

    /**
     * @return ClassReflectionInterface[]
     */
    public function getDirectImplementers(): array;

    /**
     * @return ClassReflectionInterface[]
     */
    public function getIndirectImplementers(): array;

    /**
     * @return ClassReflectionInterface[]
     */
    public function getDirectUsers(): array;

    /**
     * @return ClassReflectionInterface[]
     */
    public function getIndirectUsers(): array;

    public function implementsInterface(string $name): bool;

    /**
     * @return ClassReflectionInterface[]
     */
    public function getInterfaces(): array;

    /**
     * @return ClassReflectionInterface[]
     */
    public function getOwnInterfaces(): array;

    /**
     * @return string[]
     */
    public function getOwnInterfaceNames(): array;

    /**
     * @return MethodReflectionInterface[]|VisibilityTrait[]
     */
    public function getMethods(): array;

    /**
     * @return MethodReflectionInterface[]|VisibilityTrait[]
     */
    public function getOwnMethods(): array;

    /**
     * @return MethodReflectionInterface[]
     */
    public function getInheritedMethods(): array;

    /**
     * @return MethodReflectionInterface[]
     */
    public function getUsedMethods(): array;

    /**
     * @return MethodReflectionInterface[]
     */
    public function getTraitMethods(): array;

    public function getMethod(string $name): MethodReflectionInterface;

    public function hasMethod(string $name): bool;

    /**
     * @return ConstantReflectionInterface[]
     */
    public function getConstants(): array;

    /**
     * @return ConstantReflectionInterface[]
     */
    public function getOwnConstants(): array;

    /**
     * @return ConstantReflectionInterface[]
     */
    public function getInheritedConstants(): array;

    public function hasConstant(string $name): bool;

    public function hasOwnConstant(string $name): bool;

    public function getConstant(string $name): ConstantReflectionInterface;

    public function getOwnConstant(string $name): ConstantReflectionInterface;

    public function getDocComment(): string;

    public function getVisibilityLevel(): int;

    public function getReflectionFactory(): ReflectionFactoryInterface;

    /**
     * @return ClassReflectionInterface[]|string[]
     */
    public function getTraits(): array;

    /**
     * @return ClassReflectionInterface[]|string[]
     */
    public function getOwnTraits(): array;

    /**
     * @return string[]
     */
    public function getTraitNames(): array;

    /**
     * @return string[]
     */
    public function getOwnTraitNames(): array;

    /**
     * @return string[]
     */
    public function getTraitAliases(): array;

    /**
     * @return PropertyReflectionInterface[]
     */
    public function getProperties(): array;

    /**
     * @return PropertyReflectionInterface[]|VisibilityTrait[]
     */
    public function getOwnProperties(): array;

    /**
     * @return PropertyReflectionInterface[]
     */
    public function getInheritedProperties(): array;

    /**
     * @return PropertyReflectionInterface[]
     */
    public function getTraitProperties(): array;

    /**
     * @return PropertyReflectionInterface[]
     */
    public function getUsedProperties(): array;

    public function getProperty(string $name): PropertyReflectionInterface;

    public function hasProperty(string $name): bool;

    public function usesTrait(string $name): bool;

    /**
     * @return ClassReflectionInterface[]
     */
    public function getParsedClasses(): array;

    public function getStartPosition(): int;

    public function getEndPosition(): int;

    public function isAbstract(): bool;

    public function isFinal(): bool;

    public function isInterface(): bool;

    public function isException(): bool;

    public function isTrait(): bool;

    public function isSubclassOf(string $class): bool;
}
