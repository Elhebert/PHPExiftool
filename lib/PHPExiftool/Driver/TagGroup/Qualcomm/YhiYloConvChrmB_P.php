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
class YhiYloConvChrmB_P extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:YhiYloConvChrmB_P';

    protected string $name = 'YhiYloConvChrmB_P';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Yhi Ylo Conv Chrm B P',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 216131
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:YhiYloConvChrmB_P',
            'desc' => [
                'en' => 'Yhi Ylo Conv Chrm B P',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
