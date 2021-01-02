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
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'arrilot/laravel-widgets' => '3.13.1@ae0e44ce625026ae71c6ab9259f89f13af227e37',
  'asm89/stack-cors' => 'v2.0.2@8d8f88b3b3830916be94292c1fbce84433efb1aa',
  'barryvdh/laravel-dompdf' => 'v0.8.7@30310e0a675462bf2aa9d448c8dcbf57fbcc517d',
  'barryvdh/laravel-translation-manager' => 'v0.5.9@d01a5f171ef7244cb5c11460fe91e037a56096cc',
  'beyondcode/laravel-websockets' => '1.9.0@f08e4f287a6f097a83cc78ad764d6084ec625c09',
  'brick/math' => '0.9.1@283a40c901101e66de7061bd359252c013dcc43c',
  'cboden/ratchet' => 'v0.4.3@466a0ecc83209c75b76645eb823401b5c52e5f21',
  'christiankuri/laravel-favorite' => 'v1.4.0@e3e0b9cfc8bbbb5efbf6e6e78ee31cd9646f1b51',
  'composer/ca-bundle' => '1.2.8@8a7ecad675253e4654ea05505233285377405215',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/dbal' => '3.0.0@ee6d1260d5cc20ec506455a585945d7bdb98662c',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dompdf/dompdf' => 'v0.8.6@db91d81866c69a42dad1d2926f61515a1e3f42c5',
  'dragonmantank/cron-expression' => 'v2.3.1@65b2d8ee1f10915efb3b55597da3404f096acba2',
  'egulias/email-validator' => '2.1.24@ca90a3291eee1538cd48ff25163240695bd95448',
  'erusev/parsedown' => '1.7.4@cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
  'evenement/evenement' => 'v3.0.1@531bfb9d15f8aa57454f5f0285b18bec903b8fb7',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'fideloper/proxy' => '4.4.1@c073b2bd04d1c90e04dc1b787662b558dd65ade0',
  'firebase/php-jwt' => 'v5.2.0@feb0e820b8436873675fd3aca04f3728eb2185cb',
  'fruitcake/laravel-cors' => 'v2.0.3@01de0fe5f71c70d1930ee9a80385f9cc28e0f63a',
  'google/apiclient' => 'v2.8.3@81696e6206322e38c643cfcc96c4494ccfef8a32',
  'google/apiclient-services' => 'v0.156@2f5e54fdef034f856208328126bddd8376dae4b3',
  'google/auth' => 'v1.14.3@c1503299c779af0cbc99b43788f75930988852cf',
  'google/cloud-core' => 'v1.40.0@1f45457d796c3807bc4b19c3d7b7e89a2f59d63c',
  'google/cloud-translate' => 'v1.9.1@675f638de0ce1cc2ae76658c36b341f4112de2ff',
  'google/common-protos' => '1.3@535f489ff1c3433c0ea64cd5aa0560f926949ac5',
  'google/gax' => '1.6.1@dbf534f579f14148c046c4065b98b7bc377c194a',
  'google/grpc-gcp' => '0.1.5@bb9bdbf62f6ae4e73d5209d85b1d0a0b9855ff36',
  'google/protobuf' => 'v3.14.0@03f132a66f09f96064309e81c5fac8d35b7474e1',
  'grpc/grpc' => '1.34.0@f84e39861fd9f48ce6cc671688a05df13c7cd7e8',
  'guzzlehttp/guzzle' => '6.5.5@9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
  'guzzlehttp/promises' => '1.4.0@60d379c243457e073cff02bc323a2a86cb355631',
  'guzzlehttp/psr7' => '1.7.0@53330f47520498c0ae1f61f7e2c90f55690c06a3',
  'jaybizzle/crawler-detect' => 'v1.2.103@3efa2860959cc971f17624b40bf0699823f9d0f3',
  'jenssegers/agent' => 'v2.6.4@daa11c43729510b3700bc34d414664966b03bffe',
  'laravel/framework' => 'v7.30.0@629c36a0fe87b66d8dccd3c82927950d0f59d3f9',
  'laravel/socialite' => 'v5.1.2@19fc65ac28e0b4684a8735b14c1dc6f6ef5d62c7',
  'laravel/tinker' => 'v2.5.0@45884b526e10a88a1b179fa1a1a24d5468c668c2',
  'laravel/ui' => 'v2.5.0@d01a705763c243b07be795e9d1bb47f89260f73d',
  'laravelcollective/html' => 'v6.2.1@ae15b9c4bf918ec3a78f092b8555551dd693fde3',
  'laravelista/comments' => '3.6.1@d6fb1497f2e48c95a9ba176b567a526e853b9584',
  'league/commonmark' => '1.5.7@11df9b36fd4f1d2b727a73bf14931d81373b9a54',
  'league/flysystem' => '1.1.3@9be3b16c877d477357c015cec057548cf9b2a14a',
  'league/mime-type-detection' => '1.5.1@353f66d7555d8a90781f6f5e7091932f9a4250aa',
  'league/oauth1-client' => 'v1.8.2@159c3d2bf27568f9af87d6c3f4bb616a251eb12b',
  'mariuzzo/laravel-js-localization' => 'v1.7.0@9e92f50134e8decb57c4530725b5d08b61002242',
  'matthewbdaly/laravel-comments' => '1.1.8@b0d632cfa73ef6c340404c35e69435037edde699',
  'matthewbdaly/laravel-repositories' => '1.2.1@af05180e3674fa3a9f5ba6f9ecccdda10b41135a',
  'mobiledetect/mobiledetectlib' => '2.8.34@6f8113f57a508494ca36acbcfa2dc2d923c7ed5b',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'munafio/chatify' => 'v1.0.1@7b12cfabeac9a8255c6864462671f23479cc1317',
  'nagy/laravel-rating' => 'v1.4@0da3736632e45b5032dbfc89df79b8dbfe1fef7f',
  'nesbot/carbon' => '2.43.0@d32c57d8389113742f4a88725a170236470012e2',
  'nikic/php-parser' => 'v4.10.3@dbe56d23de8fcb157bbc0cfb3ad7c7de0cfb0984',
  'opis/closure' => '3.6.1@943b5d70cc5ae7483f6aff6ff43d7e34592ca0f5',
  'overtrue/laravel-follow' => '2.2.1@b7d6c870b1b437122b37499e2f0fce7170dec388',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'paragonie/sodium_compat' => 'v1.14.0@a1cfe0b21faf9c0b61ac0c6188c4af7fd6fd0db3',
  'phenx/php-font-lib' => '0.5.2@ca6ad461f032145fff5971b5985e5af9e7fa88d8',
  'phenx/php-svg-lib' => 'v0.3.3@5fa61b65e612ce1ae15f69b3d223cb14ecc60e32',
  'phpoption/phpoption' => '1.7.5@994ecccd8f3283ecf5ac33254543eb0ac946d525',
  'phpseclib/phpseclib' => '2.0.30@136b9ca7eebef78be14abf90d65c5e57b6bc5d36',
  'predis/predis' => 'v1.1.6@9930e933c67446962997b05201c69c2319bf26de',
  'proengsoft/laravel-jsvalidation' => 'v4.4.1@af8aa3a6c108f66609372ee78f4e6571cd0d372c',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.10.5@7c710551d4a2653afa259c544508dc18a9098956',
  'pusher/pusher-php-server' => 'dev-master@251f22602320c1b1aff84798fe74f3f7ee0504a9',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.1.1@24d93aefb2cd786b7edd9f45b554aea20b28b9b1',
  'ramsey/uuid' => '4.1.1@cd4032040a750077205918c86049aa0f43d22947',
  'ratchet/rfc6455' => 'v0.3@c8651c7938651c2d55f5d8c2422ac5e57a183341',
  'react/cache' => 'v1.1.0@44a568925556b0bd8cacc7b49fb0f1cf0d706a0c',
  'react/dns' => 'v1.4.0@665260757171e2ab17485b44e7ffffa7acb6ca1f',
  'react/event-loop' => 'v1.1.1@6d24de090cd59cfc830263cfba965be77b563c13',
  'react/http' => 'v1.2.0@badb0a87890e14b9cdfa3aec3ba1aafd900401ac',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'react/promise-stream' => 'v1.2.0@6384d8b76cf7dcc44b0bf3343fb2b2928412d1fe',
  'react/promise-timer' => 'v1.6.0@daee9baf6ef30c43ea4c86399f828bb5f558f6e6',
  'react/socket' => 'v1.6.0@e2b96b23a13ca9b41ab343268dbce3f8ef4d524a',
  'react/stream' => 'v1.1.1@7c02b510ee3f582c810aeccd3a197b9c2f52ff1a',
  'realrashid/sweet-alert' => 'v3.2.0@f9450bd8ccc5522f7e7c042bd97031f849ad44f8',
  'ringcentral/psr7' => '1.3.0@360faaec4b563958b673fb52bbe94e37f14bc686',
  'risul/laravel-like-comment' => 'v2.0.1@9b43a7831ea5d4a51a322ee317deb6e4849cc833',
  'rize/uri-template' => '0.3.2@9e5fdd5c47147aa5adf7f760002ee591ed37b9ca',
  'sabberworm/php-css-parser' => '8.3.1@d217848e1396ef962fb1997cf3e2421acba7f796',
  'shetabit/visitor' => 'v3.0.1@f82da13d9d8c9b2790bb59f7228c63a5c1bd2d27',
  'spatie/laravel-activitylog' => '3.16.1@ade270f291f4cb5883b3653919304a0b4e1cc284',
  'spatie/laravel-analytics' => '3.10.2@8e8e4b8e3eba7dcd39daf3241f43d363994453c4',
  'spatie/laravel-honeypot' => '1.5.0@e7d7f960a214f65458249228d633bfa899a3c7a1',
  'spatie/laravel-permission' => '3.18.0@1c51a5fa12131565fe3860705163e53d7a26258a',
  'stichoza/google-translate-php' => 'v4.1.2@28cc8bcf7e39069d2f41b3905dea9d8f04c30b82',
  'swiftmailer/swiftmailer' => 'v6.2.4@56f0ab23f54c4ccbb0d5dcc67ff8552e0c98d59e',
  'symfony/cache' => 'v5.2.1@5e61d63b1ef4fb4852994038267ad45e12f3ec52',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/console' => 'v5.2.1@47c02526c532fb381374dab26df05e7313978976',
  'symfony/css-selector' => 'v5.2.1@f789e7ead4c79e04ca9a6d6162fc629c89bd8054',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/error-handler' => 'v5.2.1@59b190ce16ddf32771a22087b60f6dafd3407147',
  'symfony/event-dispatcher' => 'v5.2.1@1c93f7a1dff592c252574c79a8635a8a80856042',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/finder' => 'v5.2.1@0b9231a5922fd7287ba5b411893c0ecd2733e5ba',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v5.2.1@a1f6218b29897ab52acba58cfa905b83625bef8d',
  'symfony/http-kernel' => 'v5.2.1@1feb619286d819180f7b8bc0dc44f516d9c62647',
  'symfony/mime' => 'v5.2.1@de97005aef7426ba008c46ba840fc301df577ada',
  'symfony/polyfill-ctype' => 'v1.20.0@f4ba089a5b6366e453971d3aad5fe8e897b37f41',
  'symfony/polyfill-iconv' => 'v1.20.0@c536646fdb4f29104dd26effc2fdcb9a5b085024',
  'symfony/polyfill-intl-grapheme' => 'v1.20.0@c7cf3f858ec7d70b89559d6e6eb1f7c2517d479c',
  'symfony/polyfill-intl-idn' => 'v1.20.0@3b75acd829741c768bc8b1f84eb33265e7cc5117',
  'symfony/polyfill-intl-normalizer' => 'v1.20.0@727d1096295d807c309fb01a851577302394c897',
  'symfony/polyfill-mbstring' => 'v1.20.0@39d483bdf39be819deabf04ec872eb0b2410b531',
  'symfony/polyfill-php72' => 'v1.20.0@cede45fcdfabdd6043b3592e83678e42ec69e930',
  'symfony/polyfill-php73' => 'v1.20.0@8ff431c517be11c78c48a39a66d37431e26a6bed',
  'symfony/polyfill-php80' => 'v1.20.0@e70aa8b064c5b72d3df2abd5ab1e90464ad009de',
  'symfony/process' => 'v5.2.1@bd8815b8b6705298beaa384f04fabd459c10bedd',
  'symfony/psr-http-message-bridge' => 'v2.0.2@51a21cb3ba3927d4b4bf8f25cc55763351af5f2e',
  'symfony/routing' => 'v5.2.1@934ac2720dcc878a47a45c986b483a7ee7193620',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/string' => 'v5.2.1@5bd67751d2e3f7d6f770c9154b8fbcb2aa05f7ed',
  'symfony/translation' => 'v5.2.1@a04209ba0d1391c828e5b2373181dac63c52ee70',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/var-dumper' => 'v5.2.1@13e7e882eaa55863faa7c4ad7c60f12f1a8b5089',
  'symfony/var-exporter' => 'v5.2.1@fbc3507f23d263d75417e09a12d77c009f39676c',
  'tanmuhittin/laravel-google-translate' => '2.0.4@2f2d97b7cf0a1296b92a1aeb8cb965bac683c118',
  'tedivm/jshrink' => 'v1.3.3@566e0c731ba4e372be2de429ef7d54f4faf4477a',
  'tijsverkoyen/css-to-inline-styles' => '2.2.3@b43b05cf43c1b6d849478965062b6ef73e223bb5',
  'ua-parser/uap-php' => 'v3.9.14@b796c5ea5df588e65aeb4e2c6cce3811dec4fed6',
  'vlucas/phpdotenv' => 'v4.1.8@572af79d913627a9d70374d27a6f5d689a35de32',
  'voku/portable-ascii' => '1.5.6@80953678b19901e5165c56752d087fc11526017c',
  'willvincent/laravel-rateable' => '2.3.0@f6b3440dbf4b791b235ea4e4bd3fa7f87fed236e',
  'yandex/translate-api' => '1.5.2@c99e69cde3e688fc0f99c4d8a21585226a8e1938',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'facade/flare-client-php' => '1.3.7@fd688d3c06658f2b3b5f7bb19f051ee4ddf02492',
  'facade/ignition' => '2.5.3@d8dc4f90ed469f9f9313b976fb078c20585d5c99',
  'filp/whoops' => '2.9.1@307fb34a5ab697461ec4c9db865b20ff2fd40771',
  'fzaninotto/faker' => 'v1.9.2@848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'mockery/mockery' => '1.4.2@20cab678faed06fac225193be281ea0fddb43b93',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nunomaduro/collision' => 'v4.3.0@7c125dc2463f3e144ddc7e05e63077109508c94e',
  'phar-io/manifest' => '2.0.1@85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
  'phar-io/version' => '3.0.4@e4782611070e50613683d2b9a57730e9a3ba5451',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpspec/prophecy' => '1.12.2@245710e971a030f42e08f4912863805570f23d39',
  'phpunit/php-code-coverage' => '7.0.14@bb7c9a210c72e4709cdde67f8b7362f672f2225c',
  'phpunit/php-file-iterator' => '2.0.3@4b49fb70f067272b659ef0174ff9ca40fdaa6357',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.3@2454ae1765516d20c4ffe103d85a58a9a3bd5662',
  'phpunit/php-token-stream' => '4.0.4@a853a0e183b9db7eed023d7933a858fa1c8d25a3',
  'phpunit/phpunit' => '8.5.13@8e86be391a58104ef86037ba8a846524528d784e',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '3.0.3@1071dfcef776a57013124ff35e1fc41ccd294758',
  'sebastian/diff' => '3.0.3@14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
  'sebastian/environment' => '4.2.4@d47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
  'sebastian/exporter' => '3.1.3@6b853149eab67d4da22291d36f5b0631c0fd856e',
  'sebastian/global-state' => '3.0.1@474fb9edb7ab891665d3bfc6317f42a0a150454b',
  'sebastian/object-enumerator' => '3.0.4@e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
  'sebastian/object-reflector' => '1.1.2@9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
  'sebastian/recursion-context' => '3.0.1@367dcba38d6e1977be014dc4b22f47a484dac7fb',
  'sebastian/resource-operations' => '2.0.2@31d35ca87926450c44eae7e2611d45a7a65ea8b3',
  'sebastian/type' => '1.1.4@0150cfbc4495ed2df3872fb31b26781e4e077eb4',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'laravel/laravel' => 'dev-master@219fef8b0fa8889dcaefeca2f7ad53c7bd9e0721',
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