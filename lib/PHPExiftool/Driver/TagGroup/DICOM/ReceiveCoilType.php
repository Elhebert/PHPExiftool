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
class ReceiveCoilType extends AbstractTagGroup
{
    protected string $id = 'DICOM:ReceiveCoilType';

    protected string $name = 'ReceiveCoilType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Receive Coil Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70015
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ReceiveCoilType',
            'desc' => [
                'en' => 'Receive Coil Type',
            ],
        ],
    ];

    protected int $count = 0;
}
