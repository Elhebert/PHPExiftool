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
class UltrasoundColorDataPresent extends AbstractTagGroup
{
    protected string $id = 'DICOM:UltrasoundColorDataPresent';

    protected string $name = 'UltrasoundColorDataPresent';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Ultrasound Color Data Present',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71968
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:UltrasoundColorDataPresent',
            'desc' => [
                'en' => 'Ultrasound Color Data Present',
            ],
        ],
    ];

    protected int $count = 0;
}
