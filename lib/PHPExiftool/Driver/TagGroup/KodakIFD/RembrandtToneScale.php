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
class RembrandtToneScale extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:RembrandtToneScale';

    protected string $name = 'RembrandtToneScale';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Rembrandt Tone Scale',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 107060
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:RembrandtToneScale',
            'desc' => [
                'en' => 'Rembrandt Tone Scale',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
