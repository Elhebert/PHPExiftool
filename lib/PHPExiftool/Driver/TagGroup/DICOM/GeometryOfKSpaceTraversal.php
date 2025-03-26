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
class GeometryOfKSpaceTraversal extends AbstractTagGroup
{
    protected string $id = 'DICOM:GeometryOfKSpaceTraversal';

    protected string $name = 'GeometryOfKSpaceTraversal';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Geometry Of K Space Traversal',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 69991
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:GeometryOfKSpaceTraversal',
            'desc' => [
                'en' => 'Geometry Of K Space Traversal',
            ],
        ],
    ];

    protected int $count = 0;
}
