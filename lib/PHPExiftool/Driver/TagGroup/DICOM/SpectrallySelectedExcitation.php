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
class SpectrallySelectedExcitation extends AbstractTagGroup
{
    protected string $id = 'DICOM:SpectrallySelectedExcitation';

    protected string $name = 'SpectrallySelectedExcitation';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Spectrally Selected Excitation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 69976
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:SpectrallySelectedExcitation',
            'desc' => [
                'en' => 'Spectrally Selected Excitation',
            ],
        ],
    ];

    protected int $count = 0;
}
