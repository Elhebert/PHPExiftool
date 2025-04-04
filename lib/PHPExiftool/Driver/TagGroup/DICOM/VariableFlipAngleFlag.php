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
class VariableFlipAngleFlag extends AbstractTagGroup
{
    protected string $id = 'DICOM:VariableFlipAngleFlag';

    protected string $name = 'VariableFlipAngleFlag';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Variable Flip Angle Flag',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 69409
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:VariableFlipAngleFlag',
            'desc' => [
                'en' => 'Variable Flip Angle Flag',
            ],
        ],
    ];

    protected int $count = 0;
}
