<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_getty;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SecondaryFTP extends AbstractTagGroup
{
    protected string $id = 'XMP-getty:SecondaryFTP';

    protected string $name = 'SecondaryFTP';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Secondary FTP',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::GettyImages
             * line : 281386
             * type : string
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'XMP::GettyImages.XMP-getty:SecondaryFTP',
            'desc' => [
                'en' => 'Secondary FTP',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
