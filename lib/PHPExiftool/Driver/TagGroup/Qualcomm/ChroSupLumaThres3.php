<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Qualcomm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChroSupLumaThres3 extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:ChroSupLumaThres3';

    protected string $name = 'ChroSupLumaThres3';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Chro Sup Luma Thres 3',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 213761
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:ChroSupLumaThres3',
            'desc' => [
                'en' => 'Chro Sup Luma Thres 3',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
