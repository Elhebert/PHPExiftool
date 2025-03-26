<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IsArtBokeh extends AbstractTagGroup
{
    protected string $id = 'Samsung:IsArtBokeh';

    protected string $name = 'IsArtBokeh';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Is Art Bokeh',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::SingleShotMeta
             * line : 234282
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Samsung::SingleShotMeta.Samsung:IsArtBokeh',
            'desc' => [
                'en' => 'Is Art Bokeh',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
