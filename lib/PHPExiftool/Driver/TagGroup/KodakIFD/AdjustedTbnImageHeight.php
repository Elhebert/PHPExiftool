<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AdjustedTbnImageHeight extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:AdjustedTbnImageHeight';

    protected string $name = 'AdjustedTbnImageHeight';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Adjusted Tbn Image Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106259
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:AdjustedTbnImageHeight',
            'desc' => [
                'en' => 'Adjusted Tbn Image Height',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
