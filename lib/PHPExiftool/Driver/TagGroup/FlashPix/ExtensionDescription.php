<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExtensionDescription extends AbstractTagGroup
{
    protected string $id = 'FlashPix:ExtensionDescription';

    protected string $name = 'ExtensionDescription';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Extension Description',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::Extensions
             * line : 87069
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::Extensions.FlashPix:ExtensionDescription',
            'desc' => [
                'en' => 'Extension Description',
            ],
        ],
    ];

    protected int $count = 0;
}
