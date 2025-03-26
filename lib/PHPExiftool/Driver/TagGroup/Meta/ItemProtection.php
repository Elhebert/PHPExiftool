<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Meta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ItemProtection extends AbstractTagGroup
{
    protected string $id = 'Meta:ItemProtection';

    protected string $name = 'ItemProtection';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Item Protection',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Meta
             * line : 228921
             * type : ?
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'QuickTime::Meta.Meta:ItemProtection',
            'desc' => [
                'en' => 'Item Protection',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 34;
}
