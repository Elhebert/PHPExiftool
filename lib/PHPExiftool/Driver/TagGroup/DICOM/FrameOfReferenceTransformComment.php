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
class FrameOfReferenceTransformComment extends AbstractTagGroup
{
    protected string $id = 'DICOM:FrameOfReferenceTransformComment';

    protected string $name = 'FrameOfReferenceTransformComment';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Frame Of Reference Transform Comment',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75756
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:FrameOfReferenceTransformComment',
            'desc' => [
                'en' => 'Frame Of Reference Transform Comment',
            ],
        ],
    ];

    protected int $count = 0;
}
