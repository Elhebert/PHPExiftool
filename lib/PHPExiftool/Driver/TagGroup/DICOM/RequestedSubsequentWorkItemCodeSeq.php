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
class RequestedSubsequentWorkItemCodeSeq extends AbstractTagGroup
{
    protected string $id = 'DICOM:RequestedSubsequentWorkItemCodeSeq';

    protected string $name = 'RequestedSubsequentWorkItemCodeSeq';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Requested Subsequent Work Item Code Seq',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 73197
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:RequestedSubsequentWorkItemCodeSeq',
            'desc' => [
                'en' => 'Requested Subsequent Work Item Code Seq',
            ],
        ],
    ];

    protected int $count = 0;
}
