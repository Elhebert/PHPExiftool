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
class GrayscalePresentationStateSequence extends AbstractTagGroup
{
    protected string $id = 'DICOM:GrayscalePresentationStateSequence';

    protected string $name = 'GrayscalePresentationStateSequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Grayscale Presentation State Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 68614
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:GrayscalePresentationStateSequence',
            'desc' => [
                'en' => 'Grayscale Presentation State Sequence',
            ],
        ],
    ];

    protected int $count = 0;
}
