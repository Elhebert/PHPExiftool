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
class TL84ConvChrmKCr extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:TL84ConvChrmKCr';

    protected string $name = 'TL84ConvChrmKCr';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'TL84 Conv Chrm K Cr',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 216104
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:TL84ConvChrmKCr',
            'desc' => [
                'en' => 'TL84 Conv Chrm K Cr',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
