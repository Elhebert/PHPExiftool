<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RedY extends AbstractTagGroup
{
    protected string $id = 'PNG:RedY';

    protected string $name = 'RedY';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Red Y',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PNG::PrimaryChromaticities
             * line : 190466
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PNG::PrimaryChromaticities.PNG:RedY',
            'desc' => [
                'en' => 'Red Y',
            ],
        ],
    ];

    protected int $count = 0;
}
