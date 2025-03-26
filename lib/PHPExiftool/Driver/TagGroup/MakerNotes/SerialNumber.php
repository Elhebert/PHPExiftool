<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MakerNotes;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SerialNumber extends AbstractTagGroup
{
    protected string $id = 'MakerNotes:SerialNumber';

    protected string $name = 'SerialNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Flip
             * line : 313075
             * type : string
             * writable : false
             * count : 16
             * flags :
             */
            'id' => 'QuickTime::Flip.MakerNotes:SerialNumber',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::INSV_MakerNotes
             * line : 313821
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::INSV_MakerNotes.MakerNotes:SerialNumber',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 16;
}
