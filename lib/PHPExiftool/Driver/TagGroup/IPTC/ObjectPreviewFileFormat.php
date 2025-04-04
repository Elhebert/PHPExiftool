<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ObjectPreviewFileFormat extends AbstractTagGroup
{
    protected string $id = 'IPTC:ObjectPreviewFileFormat';

    protected string $name = 'ObjectPreviewFileFormat';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Object Preview File Format',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 104090
             * type : int16u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:ObjectPreviewFileFormat',
            'desc' => [
                'en' => 'Object Preview File Format',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
