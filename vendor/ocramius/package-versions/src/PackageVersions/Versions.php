<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'hyperf/hyperf-skeleton';
    public const VERSIONS          = array (
  'doctrine/annotations' => 'v1.7.0@fa4c4e861e809d6a1103bd620cce63ed91aedfeb',
  'doctrine/inflector' => 'v1.3.0@5527a48b7313d15261292c149e55e26eae771b0a',
  'doctrine/instantiator' => '1.2.0@a2c590166b2133a4633738648b6b064edae0814a',
  'doctrine/lexer' => '1.1.0@e17f069ede36f7534b95adec71910ed1b49c74ea',
  'elasticsearch/elasticsearch' => 'v6.7.2@9ba89f905ebf699e72dacffa410331c7fecc8255',
  'fig/http-message-util' => '1.1.3@35b19404371b31b3a43823c755398c48c9966db4',
  'google/protobuf' => 'v3.9.1@4bb1a332b47f618a0a21ad3cc9a43f1c4aaa5b62',
  'guzzlehttp/guzzle' => '6.3.3@407b0cb880ace85c9b63c5f9551db498cb2d50ba',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'guzzlehttp/ringphp' => '1.1.1@5e2a174052995663dd68e6b5ad838afd47dd615b',
  'guzzlehttp/streams' => '3.0.0@47aaa48e27dae43d39fc1cea0ccf0d84ac1a2ba5',
  'hyperf/amqp' => 'v1.0.11@8e6995ca0645da49594ecfe97b234fa9dddf862b',
  'hyperf/async-queue' => 'v1.0.11@82b7a02744e181e76c21cbcaf2e711aea5da6de3',
  'hyperf/cache' => 'v1.0.10@6cb8806e81890199b6a2905de747402fcda5cb00',
  'hyperf/command' => 'v1.0.4@778868692be85feaf3ee4c6356c57692e5cf308c',
  'hyperf/config' => 'v1.0.10@12ddee5b439caf2226abc45b2f507e7621bcd64e',
  'hyperf/config-aliyun-acm' => 'v1.0.10@6e88fa461784da6ba8cdd10675118249764e3b0b',
  'hyperf/constants' => 'v1.0.9@cc294c9b46a33b7f74ee5f26570e8e01452e8c35',
  'hyperf/contract' => 'v1.0.11@628469f1465f5c5739d8e2061ef6e4fa3cc385c5',
  'hyperf/database' => 'v1.0.11@36ab678825868483cc988cd594621841109b9edc',
  'hyperf/db-connection' => 'v1.0.9@560e6e3d399c54ee193676b0132e0d2722037dd7',
  'hyperf/devtool' => 'v1.0.11@9e801b1d32970451e2b54870aad336fafa7d55f5',
  'hyperf/di' => 'v1.0.11@5139ee890014f7924441eb0d80ede198d1e56bd7',
  'hyperf/dispatcher' => 'v1.0.9@22427bff97e76d366f535cd82db0157089347309',
  'hyperf/elasticsearch' => 'v1.0.9@7f3a3ab65b86883afe56c31bf15a16c85d5dd17f',
  'hyperf/event' => 'v1.0.11@25ba50e60b10af122703fe9ff045356a660ecb7d',
  'hyperf/exception-handler' => 'v1.0.8@3287d5b9ecda883c1aa401b9b27b0f0cf643722b',
  'hyperf/framework' => 'v1.0.11@3cda200b0d53d73df213c5f6df81594c42b4d0f7',
  'hyperf/grpc' => 'v1.0.9@78137ffbc59a7f168f43fd47a1ae546bebec1cbb',
  'hyperf/grpc-client' => 'v1.0.11@8db8e9e14d674b199267ede3207b8aec95c4d0d4',
  'hyperf/grpc-server' => 'v1.0.9@80c4dfff74c6e6fed4998ef64943309ea887a0ba',
  'hyperf/guzzle' => 'v1.0.9@efe2760f2ba5b6f0de07e3d45c6ea11d6ccc751d',
  'hyperf/http-message' => 'v1.0.10@a7c417913bcf4e5eb6edd1dda5d6bc6ac6eccc92',
  'hyperf/http-server' => 'v1.0.11@2cf65048ddd601e90c1b4c3830d302bd385b9f91',
  'hyperf/logger' => 'v1.0.9@1898aff7983b6c3d60289dab875874a140cd3f19',
  'hyperf/memory' => 'v1.0.9@df00bdda75c1d0e27a7e3f5aa65971bba91ace0e',
  'hyperf/model-cache' => 'v1.0.10@14c41609f647a64f442af13ea9bc070325586ea0',
  'hyperf/paginator' => 'v1.0.9@b782a9d85453b37df3f2742fb99548e68f727ea6',
  'hyperf/pool' => 'v1.0.9@77385a3e0d3c624ab315a38b7e8f99f9cfe4958a',
  'hyperf/process' => 'v1.0.9@cda7302ffbb1d5c38aa187778782ef2c2901b8c1',
  'hyperf/redis' => 'v1.0.9@fdd81e8775f8d8f45c12d3f7a95e914e78d8010b',
  'hyperf/server' => 'v1.0.11@f187f65a83654b0d4349ea0894ec3ff33593812e',
  'hyperf/tracer' => 'v1.0.10@fb905e39ed8159b340efbf6f865921c218200063',
  'hyperf/utils' => 'v1.0.11@c5171d7fb6db33f44e58ff4ee6a6bd0e69722f82',
  'jean85/pretty-package-versions' => '1.2@75c7effcf3f77501d0e0caa75111aff4daa0dd48',
  'monolog/monolog' => '1.24.0@bfc9ebb28f97e7a24c45bdc3f0ff482e47bb0266',
  'nesbot/carbon' => '2.23.0@97a08830a22ce0b69549a4966773c0eae900468d',
  'nikic/fast-route' => 'v1.3.0@181d480e08d9476e61381e04a71b34dc0432e812',
  'nikic/php-parser' => 'v4.2.3@e612609022e935f3d0337c1295176505b41188c8',
  'ocramius/package-versions' => '1.4.0@a4d4b60d0e60da2487bd21a2c6ac089f85570dbb',
  'openzipkin/zipkin' => '1.3.4@d17d9d635b58982937651b5d7d564c92beec9f79',
  'php-amqplib/php-amqplib' => 'v2.10.0@04e5366f032906d5f716890427e425e71307d3a8',
  'php-di/phpdoc-reader' => '2.1.0@7d0de60b9341933c8afd172a6255cd7557601e0e',
  'phpoption/phpoption' => '1.5.0@94e644f7d2051a5f0fcf77d81605f152eecff0ed',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/http-server-handler' => '1.0.1@aff2f80e33b7f026ec96bb42f63242dc50ffcae7',
  'psr/http-server-middleware' => '1.0.1@2296f45510945530b9dceb8bcedb5cb84d40c5f5',
  'psr/log' => '1.1.0@6c001f1daafa3a3ac1d8ff69ee4db8e799a654dd',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'react/promise' => 'v2.7.1@31ffa96f8d2ed0341a57848cbb84d88b89dd664d',
  'symfony/console' => 'v4.3.3@8b0ae5742ce9aaa8b0075665862c1ca397d1c1d9',
  'symfony/finder' => 'v4.3.3@9638d41e3729459860bb96f6247ccb61faaa45f2',
  'symfony/polyfill-ctype' => 'v1.12.0@550ebaac289296ce228a706d0867afc34687e3f4',
  'symfony/polyfill-mbstring' => 'v1.12.0@b42a2f66e8f1b15ccf25652c3424265923eb4f17',
  'symfony/polyfill-php73' => 'v1.12.0@2ceb49eaccb9352bff54d22570276bb75ba4a188',
  'symfony/service-contracts' => 'v1.1.5@f391a00de78ec7ec8cf5cdcdae59ec7b883edb8d',
  'symfony/translation' => 'v4.3.3@4e3e39cc485304f807622bdc64938e4633396406',
  'symfony/translation-contracts' => 'v1.1.5@cb4b18ad7b92a26e83b65dde940fab78339e6f3c',
  'vlucas/phpdotenv' => 'v3.4.0@5084b23845c24dbff8ac6c204290c341e4776c92',
  'zendframework/zend-mime' => '2.7.1@52ae5fa9f12845cae749271034a2d594f0e4c6f2',
  'zendframework/zend-stdlib' => '3.2.1@66536006722aff9e62d1b331025089b7ec71c065',
  'composer/semver' => '1.5.0@46d9139568ccb8d9e7cdd4539cab7347568a5e2e',
  'composer/xdebug-handler' => '1.3.3@46867cbf8ca9fb8d60c506895449eb799db1184f',
  'doctrine/cache' => 'v1.8.0@d768d58baee9a4862ca783840eca1b9add7a7f57',
  'doctrine/collections' => 'v1.6.2@c5e0bc17b1620e97c968ac409acbff28b8b850be',
  'doctrine/common' => 'v2.10.0@30e33f60f64deec87df728c02b107f82cdafad9d',
  'doctrine/event-manager' => 'v1.0.0@a520bc093a0170feeb6b14e9d83f3a14452e64b3',
  'doctrine/persistence' => '1.1.1@3da7c9d125591ca83944f477e65ed3d7b4617c48',
  'doctrine/reflection' => 'v1.0.0@02538d3f95e88eb397a5f86274deb2c6175c2ab6',
  'friendsofphp/php-cs-fixer' => 'v2.15.1@20064511ab796593a3990669eff5f5b535001f7c',
  'hamcrest/hamcrest-php' => 'v2.0.0@776503d3a8e85d4f9a1148614f95b7a608b046ad',
  'hyperf/testing' => 'v1.0.2@236cd6cf1e04dc948a463b03e3f92ab0879ebb33',
  'mockery/mockery' => '1.2.3@4eff936d83eb809bde2c57a3cea0ee9643769031',
  'myclabs/deep-copy' => '1.9.3@007c053ae6f31bba39dfa19a7726f56e9763bbea',
  'nette/bootstrap' => 'v3.0.0@e1075af05c211915e03e0c86542f3ba5433df4a3',
  'nette/di' => 'v3.0.1@4aff517a1c6bb5c36fa09733d4cea089f529de6d',
  'nette/finder' => 'v2.5.0@6be1b83ea68ac558aff189d640abe242e0306fe2',
  'nette/neon' => 'v3.0.0@cbff32059cbdd8720deccf9e9eace6ee516f02eb',
  'nette/php-generator' => 'v3.2.3@aea6e81437bb238e5f0e5b5ce06337433908e63b',
  'nette/robot-loader' => 'v3.2.0@0712a0e39ae7956d6a94c0ab6ad41aa842544b5c',
  'nette/schema' => 'v1.0.0@6241d8d4da39e825dd6cb5bfbe4242912f4d7e4d',
  'nette/utils' => 'v3.0.1@bd961f49b211997202bda1d0fbc410905be370d4',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'pdepend/pdepend' => '2.5.2@9daf26d0368d4a12bed1cacae1a9f3a6f0adf239',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'php-cs-fixer/diff' => 'v1.3.0@78bb099e9c16361126c86ce82ec4405ebab8e756',
  'phpdocumentor/reflection-common' => '1.0.1@21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6',
  'phpdocumentor/reflection-docblock' => '4.3.1@bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c',
  'phpdocumentor/type-resolver' => '0.4.0@9c977708995954784726e25d0cd1dddf4e65b0f7',
  'phpmd/phpmd' => '2.7.0@a05a999c644f4bc9a204846017db7bb7809fbe4c',
  'phpspec/prophecy' => '1.8.1@1927e75f4ed19131ec9bcc3b002e07fb1173ee76',
  'phpstan/phpdoc-parser' => '0.3.5@8c4ef2aefd9788238897b678a985e1d5c8df6db4',
  'phpstan/phpstan' => '0.11.13@493d12d4a98ba0d2a0b8e576d80e65c8e8068d08',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.0@e899757bb3df5ff6e95089132f32cd59aac2220a',
  'phpunit/phpunit' => '7.5.14@2834789aeb9ac182ad69bfdf9ae91856a59945ff',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.2@f2a2c8e1c97c11ace607a7a667d73d47c19fe404',
  'sebastian/exporter' => '3.1.1@06a9a5947f47b3029d76118eb5c22802e5869687',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'swoft/swoole-ide-helper' => 'v4.4.0@6d813bd31cd18924771181922bf3bc0b92ae68b7',
  'symfony/config' => 'v4.3.3@a17a2aea43950ce83a0603ed301bac362eb86870',
  'symfony/dependency-injection' => 'v4.3.3@9ad1b83d474ae17156f6914cb81ffe77aeac3a9b',
  'symfony/event-dispatcher' => 'v4.3.3@212b020949331b6531250584531363844b34a94e',
  'symfony/event-dispatcher-contracts' => 'v1.1.5@c61766f4440ca687de1084a5c00b08e167a2575c',
  'symfony/filesystem' => 'v4.3.3@b9896d034463ad6fd2bf17e2bf9418caecd6313d',
  'symfony/options-resolver' => 'v4.3.3@40762ead607c8f792ee4516881369ffa553fee6f',
  'symfony/polyfill-php70' => 'v1.12.0@54b4c428a0054e254223797d2713c31e08610831',
  'symfony/polyfill-php72' => 'v1.12.0@04ce3335667451138df4307d6a9b61565560199e',
  'symfony/process' => 'v4.3.3@856d35814cf287480465bb7a6c413bb7f5f5e69c',
  'symfony/stopwatch' => 'v4.3.3@6b100e9309e8979cf1978ac1778eb155c1f7d93b',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'webmozart/assert' => '1.4.0@83e253c8e0be5b0257b881e1827274667c5c17a9',
  'hyperf/hyperf-skeleton' => 'v1.0.5@',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: cannot detect its version'
        );
    }
}
