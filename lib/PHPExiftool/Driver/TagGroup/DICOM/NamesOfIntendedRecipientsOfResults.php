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
class NamesOfIntendedRecipientsOfResults extends AbstractTagGroup
{
    protected string $id = 'DICOM:NamesOfIntendedRecipientsOfResults';

    protected string $name = 'NamesOfIntendedRecipientsOfResults';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Names Of Intended Recipients Of Results',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 73071
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:NamesOfIntendedRecipientsOfResults',
            'desc' => [
                'en' => 'Names Of Intended Recipients Of Results',
            ],
        ],
    ];

    protected int $count = 0;
}
