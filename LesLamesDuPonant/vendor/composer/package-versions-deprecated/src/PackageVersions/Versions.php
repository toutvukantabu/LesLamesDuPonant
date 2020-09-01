<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99@c8c9aa8a14cc3d3bec86d0a8c3fa52ea79936855',
  'doctrine/annotations' => '1.10.4@bfe91e31984e2ba76df1c1339681770401ec262f',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '2.1.0@0fb513842c78b43770597ef3c487cdf79d944db3',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '2.1.19@840d5603eb84cc81a6a0382adac3293e57c1c64c',
  'friendsofsymfony/ckeditor-bundle' => '2.2.0@7e1cfe2a83faba0be02661d44289d35e940bb5ea',
  'monolog/monolog' => '2.1.1@f9eee5cec93dfb313a38b6b288741e84e53f02d5',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.1@d870572532cd70bc3fab58f2e23ad423c8404c44',
  'phpdocumentor/type-resolver' => '1.3.0@e878a14a65245fbe78f8080eba03b47c3b705651',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.6.0@ced361d17ef6a52af90708e081c5ad900dc45a11',
  'symfony/asset' => 'v5.1.4@2f07b5993f1607c1c489bac3e15a000c33668b4b',
  'symfony/cache' => 'v5.1.4@5a165f187e675312e4b179e4955daa4e02b8f365',
  'symfony/cache-contracts' => 'v2.1.3@9771a09d2e6b84ecb8c9f0a7dbc72ee92aeba009',
  'symfony/config' => 'v5.1.4@22f961ddffdc81389670b2ca74a1cc0213761ec0',
  'symfony/console' => 'v5.1.4@51ff337ce194bdc3d8db12b20ce8cd54ac9f71e9',
  'symfony/dependency-injection' => 'v5.1.4@52e8a8a63f9e6ba56e83be076fd48cc309191e10',
  'symfony/deprecation-contracts' => 'v2.1.3@5e20b83385a77593259c9f8beb2c43cd03b2ac14',
  'symfony/doctrine-bridge' => 'v5.1.4@31cb4cfe6b9452cc1916022e995a08de4005299a',
  'symfony/dotenv' => 'v5.1.4@42d2a18597f4c7cafc0e25b1ad6a1cbb4f2caf05',
  'symfony/error-handler' => 'v5.1.4@525636d4b84e06c6ca72d96b6856b5b169416e6a',
  'symfony/event-dispatcher' => 'v5.1.4@94871fc0a69c3c5da57764187724cdce0755899c',
  'symfony/event-dispatcher-contracts' => 'v2.1.3@f6f613d74cfc5a623fc36294d3451eb7fa5a042b',
  'symfony/expression-language' => 'v5.1.4@6675d937852379a251017db6e5144dd57506fbbd',
  'symfony/filesystem' => 'v5.1.4@f7b9ed6142a34252d219801d9767dedbd711da1a',
  'symfony/finder' => 'v5.1.4@2b765f0cf6612b3636e738c0689b29aa63088d5d',
  'symfony/flex' => 'v1.9.3@1eab1e85f5eb66dac138d6240cc0ceffd6e3ae34',
  'symfony/form' => 'v5.1.4@4c54e27fc6118eab64adbd285110a92272605c12',
  'symfony/framework-bundle' => 'v5.1.4@0607ca3cb7b79461a2e6a7c5d05e5cd6d2c14015',
  'symfony/google-mailer' => 'v5.1.4@361611404c036c6347329e996a289374c3148499',
  'symfony/http-client' => 'v5.1.4@edf00ab1692aa2ad19ba87e58273c825b9f39c93',
  'symfony/http-client-contracts' => 'v2.1.3@cd88921e9add61f2064c9c6b30de4f589db42962',
  'symfony/http-foundation' => 'v5.1.4@41a4647f12870e9d41d9a7d72ff0614a27208558',
  'symfony/http-kernel' => 'v5.1.4@f829c240113986b60fda425c2533142e88efd7c4',
  'symfony/intl' => 'v5.1.4@b6886c43cc1ae3367c569c5a8d4182555dd694fb',
  'symfony/mailer' => 'v5.1.4@f1db70ed62033aa27b9db1bbf14dba9004bea61a',
  'symfony/mime' => 'v5.1.4@89a2c9b4cb7b5aa516cf55f5194c384f444c81dc',
  'symfony/monolog-bridge' => 'v5.1.4@c312bf3de53a5e2b784224045d6e7d5c0abfe1c0',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/notifier' => 'v5.1.4@19699652eaa69b0389bc985853f29b8e9177b1cf',
  'symfony/options-resolver' => 'v5.1.4@9ff59517938f88d90b6e65311fef08faa640f681',
  'symfony/polyfill-intl-grapheme' => 'v1.18.1@b740103edbdcc39602239ee8860f0f45a8eb9aa5',
  'symfony/polyfill-intl-icu' => 'v1.18.1@4e45a6e39041a9cc78835b11abc47874ae302a55',
  'symfony/polyfill-intl-idn' => 'v1.18.1@5dcab1bc7146cf8c1beaa4502a3d9be344334251',
  'symfony/polyfill-intl-normalizer' => 'v1.18.1@37078a8dd4a2a1e9ab0231af7c6cb671b2ed5a7e',
  'symfony/polyfill-mbstring' => 'v1.18.1@a6977d63bf9a0ad4c65cd352709e230876f9904a',
  'symfony/polyfill-php73' => 'v1.18.1@fffa1a52a023e782cdcc221d781fe1ec8f87fcca',
  'symfony/polyfill-php80' => 'v1.18.1@d87d5766cbf48d72388a9f6b85f280c8ad51f981',
  'symfony/process' => 'v5.1.4@1864216226af21eb76d9477f691e7cbf198e0402',
  'symfony/property-access' => 'v5.1.4@c2a95da4d3b88523d00903a3d04636717766d674',
  'symfony/property-info' => 'v5.1.4@a10524dfdadc418c2e4b52667be7d6421b7da26f',
  'symfony/routing' => 'v5.1.4@47b0218344cb6af25c93ca8ee1137fafbee5005d',
  'symfony/security-bundle' => 'v5.1.4@c761866b9aa13add16e6f7dec5f40ab85c2a3ad7',
  'symfony/security-core' => 'v5.1.4@0b965da49ccf070764baa2a23bbb926036b6c6b2',
  'symfony/security-csrf' => 'v5.1.4@962323e4db4458d731d5006f14019a22a2f84b06',
  'symfony/security-guard' => 'v5.1.4@85c368be963e9f0df9e93d830f966fc0af531703',
  'symfony/security-http' => 'v5.1.4@7741021221548e2b5768ec0cf502c91b6c55b209',
  'symfony/serializer' => 'v5.1.4@a2c913f5a25a13bd5878dff1fe9c922157bb73a2',
  'symfony/service-contracts' => 'v2.1.3@58c7475e5457c5492c26cc740cc0ad7464be9442',
  'symfony/stopwatch' => 'v5.1.4@0f7c58cf81dbb5dd67d423a89d577524a2ec0323',
  'symfony/string' => 'v5.1.4@0de4cc1e18bb596226c06a82e2e7e9bc6001a63a',
  'symfony/translation' => 'v5.1.4@917b02cdc5f33e0309b8e9d33ee1480b20687413',
  'symfony/translation-contracts' => 'v2.1.3@616a9773c853097607cf9dd6577d5b143ffdcd63',
  'symfony/twig-bridge' => 'v5.1.4@4534dbfd47745a924beaa6e7c9d5462993bbd0a5',
  'symfony/twig-bundle' => 'v5.1.4@8898ef8aea8fa48638e15ce00c7c6318ce570ce1',
  'symfony/validator' => 'v5.1.3@03aeabbff76771ef467a4d9a0574c427bb81d932',
  'symfony/var-dumper' => 'v5.1.4@b43a3905262bcf97b2510f0621f859ca4f5287be',
  'symfony/var-exporter' => 'v5.1.4@eabaabfe1485ca955c5b53307eade15ccda57a15',
  'symfony/web-link' => 'v5.1.4@ba2554887e34e693e3888f23f83c72d5ce04bfb2',
  'symfony/yaml' => 'v5.1.4@a44bd3a91bfbf8db12367fa6ffac9c3eb1a8804a',
  'symfonycasts/reset-password-bundle' => 'v1.1.1@ac39892a5de861209cb7491e056a77a0b872e87d',
  'symfonycasts/verify-email-bundle' => 'v1.0.0@501e503f6a8ae282ffb3fff167e0740dae56b1ae',
  'twig/extra-bundle' => 'v3.0.5@a7c5799cf742ab0827f5d32df37528ee8bf5a233',
  'twig/string-extra' => 'v3.0.5@8e9b436d25b9473e9dc163c83cff1eb9f5dd68c4',
  'twig/twig' => 'v3.0.5@9b76b1535483cdf4edf01bb787b0217b62bd68a5',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'nikic/php-parser' => 'v4.9.1@88e519766fc58bd46b8265561fb79b54e2e00b28',
  'symfony/browser-kit' => 'v5.1.4@b9545e08790be2d3d7d92306e339bbcd79f461e4',
  'symfony/css-selector' => 'v5.1.4@e544e24472d4c97b2d11ade7caacd446727c6bf9',
  'symfony/debug-bundle' => 'v5.1.4@3f4bcea52678eedf19260973217f5ae7b835edf5',
  'symfony/dom-crawler' => 'v5.1.4@3ac31ffbc596e41ca081037b7d78fc7a853c0315',
  'symfony/maker-bundle' => 'v1.21.1@da629093c7bf9abd9a6a0f232a43bbb1b88de68d',
  'symfony/phpunit-bridge' => 'v5.1.4@3229133c5f966d50a741a668e54b34c1368200a0',
  'symfony/web-profiler-bundle' => 'v5.1.4@57580233309788f66e69ad783989880b1b85c77f',
  'paragonie/random_compat' => '2.*@d85bf3332a9ea71726a46d99f26bf5ac850f6035',
  'symfony/polyfill-ctype' => '*@d85bf3332a9ea71726a46d99f26bf5ac850f6035',
  'symfony/polyfill-iconv' => '*@d85bf3332a9ea71726a46d99f26bf5ac850f6035',
  'symfony/polyfill-php72' => '*@d85bf3332a9ea71726a46d99f26bf5ac850f6035',
  'symfony/polyfill-php71' => '*@d85bf3332a9ea71726a46d99f26bf5ac850f6035',
  'symfony/polyfill-php70' => '*@d85bf3332a9ea71726a46d99f26bf5ac850f6035',
  'symfony/polyfill-php56' => '*@d85bf3332a9ea71726a46d99f26bf5ac850f6035',
  '__root__' => 'dev-travail-variable-logo@d85bf3332a9ea71726a46d99f26bf5ac850f6035',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
