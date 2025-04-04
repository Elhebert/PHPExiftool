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
class DimensionIndexPrivateCreator extends AbstractTagGroup
{
    protected string $id = 'DICOM:DimensionIndexPrivateCreator';

    protected string $name = 'DimensionIndexPrivateCreator';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Dimension Index Private Creator',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71443
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:DimensionIndexPrivateCreator',
            'desc' => [
                'en' => 'Dimension Index Private Creator',
            ],
        ],
    ];

    protected int $count = 0;
}
