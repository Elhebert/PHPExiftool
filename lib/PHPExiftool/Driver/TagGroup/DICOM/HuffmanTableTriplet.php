<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HuffmanTableTriplet extends AbstractTagGroup
{
    protected string $id = 'DICOM:HuffmanTableTriplet';

    protected string $name = 'HuffmanTableTriplet';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Huffman Table Triplet',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75108
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:HuffmanTableTriplet',
            'desc' => [
                'en' => 'Huffman Table Triplet',
            ],
        ],
    ];

    protected int $count = 0;
}
