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
class MACCalculationTransferSyntaxUID extends AbstractTagGroup
{
    protected string $id = 'DICOM:MACCalculationTransferSyntaxUID';

    protected string $name = 'MACCalculationTransferSyntaxUID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'MAC Calculation Transfer Syntax UID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75030
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:MACCalculationTransferSyntaxUID',
            'desc' => [
                'en' => 'MAC Calculation Transfer Syntax UID',
            ],
        ],
    ];

    protected int $count = 0;
}
