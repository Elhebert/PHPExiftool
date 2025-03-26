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
class IssuerOfAdmissionID extends AbstractTagGroup
{
    protected string $id = 'DICOM:IssuerOfAdmissionID';

    protected string $name = 'IssuerOfAdmissionID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Issuer Of Admission ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72606
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:IssuerOfAdmissionID',
            'desc' => [
                'en' => 'Issuer Of Admission ID',
            ],
        ],
    ];

    protected int $count = 0;
}
