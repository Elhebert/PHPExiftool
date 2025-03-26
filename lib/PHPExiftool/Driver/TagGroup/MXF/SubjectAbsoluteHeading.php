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
class SubjectAbsoluteHeading extends AbstractTagGroup
{
    protected string $id = 'MXF:SubjectAbsoluteHeading';

    protected string $name = 'SubjectAbsoluteHeading';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Subject Absolute Heading',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114848
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:SubjectAbsoluteHeading',
            'desc' => [
                'en' => 'Subject Absolute Heading',
            ],
        ],
    ];

    protected int $count = 0;
}
