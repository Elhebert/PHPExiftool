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
class DefaultMagnificationType extends AbstractTagGroup
{
    protected string $id = 'DICOM:DefaultMagnificationType';

    protected string $name = 'DefaultMagnificationType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Default Magnification Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75207
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:DefaultMagnificationType',
            'desc' => [
                'en' => 'Default Magnification Type',
            ],
        ],
    ];

    protected int $count = 0;
}
