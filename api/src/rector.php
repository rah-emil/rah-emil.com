<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\CodingStyle\Rector\FuncCall\ArraySpreadInsteadOfArrayMergeRector;
use Rector\Config\RectorConfig;
use Rector\Naming\Rector\Class_\RenamePropertyToMatchTypeRector;
use Rector\Php53\Rector\Ternary\TernaryToElvisRector;
use Rector\Php54\Rector\Array_\LongArrayToShortArrayRector;
use Rector\Php70\Rector\If_\IfToSpaceshipRector;
use Rector\Php70\Rector\Ternary\TernaryToNullCoalescingRector;
use Rector\Php70\Rector\Ternary\TernaryToSpaceshipRector;
use Rector\Php71\Rector\FuncCall\RemoveExtraParametersRector;
use Rector\Php71\Rector\List_\ListToArrayDestructRector;
use Rector\Php71\Rector\TryCatch\MultiExceptionCatchRector;
use Rector\Php73\Rector\FuncCall\JsonThrowOnErrorRector;
use Rector\Php73\Rector\FuncCall\SetCookieRector;
use Rector\Php74\Rector\Assign\NullCoalescingOperatorRector;
use Rector\Php74\Rector\Closure\ClosureToArrowFunctionRector;
use Rector\Php74\Rector\Double\RealToFloatTypeCastRector;
use Rector\Php74\Rector\Property\RestoreDefaultNullToNullableTypePropertyRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use RectorLaravel\Rector\Class_\AnonymousMigrationsRector;
use RectorLaravel\Rector\ClassMethod\MigrateToSimplifiedAttributeRector;
use RectorLaravel\Rector\FuncCall\FactoryFuncCallToStaticCallRector;
use RectorLaravel\Rector\FuncCall\RemoveDumpDataDeadCodeRector;
use RectorLaravel\Rector\PropertyFetch\OptionalToNullsafeOperatorRector;
use RectorLaravel\Rector\PropertyFetch\ReplaceFakerInstanceWithHelperRector;
use RectorLaravel\Rector\StaticCall\Redirect301ToPermanentRedirectRector;
use RectorLaravel\Set\LaravelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->skip([
        // Скип полного файла
        // __DIR__ . '/app/Http/Middleware/RedirectIfAuthenticated.php',

        // Скип правила для всех файлов
        // EncapsedStringsToSprintfRector::class,

        // Скип конкретного правила для конкретного файла
        // ChangeAndIfToEarlyReturnRector::class => [
        //    __DIR__ . '/app/Pipelines/RedirectIfSafeLink',
        // ],
    ]);

    $rectorConfig->paths([
        __DIR__ . '/app',
        __DIR__ . '/config',
        __DIR__ . '/public',
        __DIR__ . '/resources',
        __DIR__ . '/tests',
        __DIR__ . '/database',
    ]);

    $rectorConfig->rules([
        // https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md#inlineconstructordefaulttopropertyrector
        InlineConstructorDefaultToPropertyRector::class,
        // https://github.com/driftingly/rector-laravel/blob/main/docs/rector_rules_overview.md#anonymousmigrationsrector
        AnonymousMigrationsRector::class,
        // https://github.com/driftingly/rector-laravel/blob/main/docs/rector_rules_overview.md#factoryfunccalltostaticcallrector
        FactoryFuncCallToStaticCallRector::class,
        // https://github.com/driftingly/rector-laravel/blob/main/docs/rector_rules_overview.md#migratetosimplifiedattributerector
        MigrateToSimplifiedAttributeRector::class,
        // https://github.com/driftingly/rector-laravel/blob/main/docs/rector_rules_overview.md#optionaltonullsafeoperatorrector
        OptionalToNullsafeOperatorRector::class,
        // https://github.com/driftingly/rector-laravel/blob/main/docs/rector_rules_overview.md#redirect301topermanentredirectrector
        Redirect301ToPermanentRedirectRector::class,
        // https://github.com/driftingly/rector-laravel/blob/main/docs/rector_rules_overview.md#removedumpdatadeadcoderector
        RemoveDumpDataDeadCodeRector::class,
        // https://github.com/driftingly/rector-laravel/blob/main/docs/rector_rules_overview.md#replacefakerinstancewithhelperrector
        ReplaceFakerInstanceWithHelperRector::class,
        // TernaryToElvisRector
        TernaryToElvisRector::class,
        // https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md#longarraytoshortarrayrector
        LongArrayToShortArrayRector::class,
        // https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md#iftospaceshiprector
        IfToSpaceshipRector::class,
        // https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md#ternarytonullcoalescingrector
        TernaryToNullCoalescingRector::class,
        // https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md#ternarytospaceshiprector
        TernaryToSpaceshipRector::class,
        // https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md#listtoarraydestructrector
        ListToArrayDestructRector::class,
        // https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md#multiexceptioncatchrector
        MultiExceptionCatchRector::class,
        // https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md#removeextraparametersrector
        RemoveExtraParametersRector::class,
        // https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md#jsonthrowonerrorrector
        JsonThrowOnErrorRector::class,
        // https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md#setcookierector
        SetCookieRector::class,
        // ArraySpreadInsteadOfArrayMergeRector
        ArraySpreadInsteadOfArrayMergeRector::class,
        // https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md#closuretoarrowfunctionrector
        ClosureToArrowFunctionRector::class,
        // https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md#nullcoalescingoperatorrector
        NullCoalescingOperatorRector::class,
        // https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md#realtofloattypecastrector
        RealToFloatTypeCastRector::class,
        // https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md#restoredefaultnulltonullabletypepropertyrector
        RestoreDefaultNullToNullableTypePropertyRector::class,
        // https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md#renamepropertytomatchtyperector
        RenamePropertyToMatchTypeRector::class,
    ]);

    // Наборы правил
    // Основные: https://github.com/rectorphp/rector/blob/main/docs/rector_rules_overview.md#categories
    // Laravel: https://github.com/driftingly/rector-laravel/blob/main/docs/rector_rules_overview.md
    $rectorConfig->sets([
        LaravelSetList::LARAVEL_100,
        LaravelSetList::LARAVEL_ELOQUENT_MAGIC_METHOD_TO_QUERY_BUILDER,
        LevelSetList::UP_TO_PHP_82,
        LevelSetList::UP_TO_PHP_81,
        SetList::PHP_82,
        SetList::PHP_81,
        SetList::PHP_80,
        SetList::DEAD_CODE,
        SetList::EARLY_RETURN,
        SetList::CODE_QUALITY,
        SetList::TYPE_DECLARATION,
        SetList::CODING_STYLE,
    ]);
};
