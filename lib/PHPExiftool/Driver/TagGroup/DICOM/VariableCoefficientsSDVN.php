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
class VariableCoefficientsSDVN extends AbstractTagGroup
{
    protected string $id = 'DICOM:VariableCoefficientsSDVN';

    protected string $name = 'VariableCoefficientsSDVN';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Variable Coefficients SDVN',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 77481
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:VariableCoefficientsSDVN',
            'desc' => [
                'en' => 'Variable Coefficients SDVN',
            ],
        ],
    ];

    protected int $count = 0;
}
