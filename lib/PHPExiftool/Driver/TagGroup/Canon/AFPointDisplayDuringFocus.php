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
class AFPointDisplayDuringFocus extends AbstractTagGroup
{
    protected string $id = 'Canon:AFPointDisplayDuringFocus';

    protected string $name = 'AFPointDisplayDuringFocus';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Point Display During Focus',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::AFConfig
             * line : 2481
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::AFConfig.Canon:AFPointDisplayDuringFocus',
            'desc' => [
                'en' => 'AF Point Display During Focus',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
