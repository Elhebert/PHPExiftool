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
class ReferencedTransferSyntaxUIDInFile extends AbstractTagGroup
{
    protected string $id = 'DICOM:ReferencedTransferSyntaxUIDInFile';

    protected string $name = 'ReferencedTransferSyntaxUIDInFile';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Referenced Transfer Syntax UID In File',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 68137
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ReferencedTransferSyntaxUIDInFile',
            'desc' => [
                'en' => 'Referenced Transfer Syntax UID In File',
            ],
        ],
    ];

    protected int $count = 0;
}
