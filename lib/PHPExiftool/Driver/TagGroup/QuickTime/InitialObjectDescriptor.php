<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class InitialObjectDescriptor extends AbstractTagGroup
{
    protected string $id = 'QuickTime:InitialObjectDescriptor';

    protected string $name = 'InitialObjectDescriptor';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Movie
             * line : 324061
             * type : ?
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'QuickTime::Movie.QuickTime:InitialObjectDescriptor',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 34;
}
