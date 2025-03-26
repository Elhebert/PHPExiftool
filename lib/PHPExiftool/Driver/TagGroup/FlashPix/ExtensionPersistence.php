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
class ExtensionPersistence extends AbstractTagGroup
{
    protected string $id = 'FlashPix:ExtensionPersistence';

    protected string $name = 'ExtensionPersistence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::Extensions
             * line : 124562
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::Extensions.FlashPix:ExtensionPersistence',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
