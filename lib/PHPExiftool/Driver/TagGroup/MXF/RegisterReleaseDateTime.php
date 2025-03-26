<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RegisterReleaseDateTime extends AbstractTagGroup
{
    protected string $id = 'MXF:RegisterReleaseDateTime';

    protected string $name = 'RegisterReleaseDateTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Register Release Date Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 118642
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:RegisterReleaseDateTime',
            'desc' => [
                'en' => 'Register Release Date Time',
            ],
        ],
    ];

    protected int $count = 0;
}
