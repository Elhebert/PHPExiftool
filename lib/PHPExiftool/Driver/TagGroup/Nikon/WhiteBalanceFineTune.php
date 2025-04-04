<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalanceFineTune extends AbstractTagGroup
{
    protected string $id = 'Nikon:WhiteBalanceFineTune';

    protected string $name = 'WhiteBalanceFineTune';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'White Balance Fine Tune',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 132863
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:WhiteBalanceFineTune',
            'desc' => [
                'en' => 'White Balance Fine Tune',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137126
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:WhiteBalanceFineTune',
            'desc' => [
                'en' => 'White Balance Fine Tune',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
