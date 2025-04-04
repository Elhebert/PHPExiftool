<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DocumentAncestors extends AbstractTagGroup
{
    protected string $id = 'XMP-photoshop:DocumentAncestors';

    protected string $name = 'DocumentAncestors';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Document Ancestors',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::photoshop
             * line : 289779
             * type : string
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'XMP::photoshop.XMP-photoshop:DocumentAncestors',
            'desc' => [
                'en' => 'Document Ancestors',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
