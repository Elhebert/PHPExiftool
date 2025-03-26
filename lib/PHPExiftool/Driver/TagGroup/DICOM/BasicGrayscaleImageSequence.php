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
class BasicGrayscaleImageSequence extends AbstractTagGroup
{
    protected string $id = 'DICOM:BasicGrayscaleImageSequence';

    protected string $name = 'BasicGrayscaleImageSequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Basic Grayscale Image Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75282
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:BasicGrayscaleImageSequence',
            'desc' => [
                'en' => 'Basic Grayscale Image Sequence',
            ],
        ],
    ];

    protected int $count = 0;
}
