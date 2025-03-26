<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OneShotAFRelease extends AbstractTagGroup
{
    protected string $id = 'Canon:OneShotAFRelease';

    protected string $name = 'OneShotAFRelease';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'One Shot AF Release',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::AFConfig
             * line : 2389
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::AFConfig.Canon:OneShotAFRelease',
            'desc' => [
                'en' => 'One Shot AF Release',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
