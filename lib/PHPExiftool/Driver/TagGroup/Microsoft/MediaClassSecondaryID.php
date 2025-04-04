<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MediaClassSecondaryID extends AbstractTagGroup
{
    protected string $id = 'Microsoft:MediaClassSecondaryID';

    protected string $name = 'MediaClassSecondaryID';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Media Class Secondary ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 120553
             * type : GUID
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:MediaClassSecondaryID',
            'desc' => [
                'en' => 'Media Class Secondary ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
