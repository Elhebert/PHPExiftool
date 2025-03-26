<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ViewInfoDuringExposure extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:ViewInfoDuringExposure';

    protected string $name = 'ViewInfoDuringExposure';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'View Info During Exposure',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54309
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:ViewInfoDuringExposure',
            'desc' => [
                'en' => 'View Info During Exposure',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
