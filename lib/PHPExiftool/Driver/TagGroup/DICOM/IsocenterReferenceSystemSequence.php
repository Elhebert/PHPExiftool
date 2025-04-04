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
class IsocenterReferenceSystemSequence extends AbstractTagGroup
{
    protected string $id = 'DICOM:IsocenterReferenceSystemSequence';

    protected string $name = 'IsocenterReferenceSystemSequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Isocenter Reference System Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70585
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:IsocenterReferenceSystemSequence',
            'desc' => [
                'en' => 'Isocenter Reference System Sequence',
            ],
        ],
    ];

    protected int $count = 0;
}
